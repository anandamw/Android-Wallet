import React, { useState } from "react";
import {
    SafeAreaView,
    Text,
    TextInput,
    TouchableOpacity,
    View,
    Image,
    Platform,
    Alert,
} from "react-native";
import DateTimePicker from "@react-native-community/datetimepicker";
import Assets from "../../assets";

import { Network } from "../../network";
import { useRouter } from "expo-router";

const DepositScreen = () => {

    const router = useRouter()
    const [amount, setAmount] = useState("");
    const [date, setDate] = useState(new Date());
    const [showPicker, setShowPicker] = useState(false);
    const [loading, setLoading] = useState(false);

    const handleDateChange = (event, selectedDate) => {
        setShowPicker(false);
        if (selectedDate) {
            setDate(selectedDate);
        }
    };

    const handleSubmit = async () => {
        if (!amount) {
            Alert.alert("Error", "Please enter an amount");
            return;
        }

        setLoading(true);
        try {
            console.log("Sending request to:", `${Network.Domain}/deposit/store`);
            console.log("Request body:", JSON.stringify({
                user_id: 1,
                amount: amount,
                date: date.toISOString().split("T")[0],
            }));

            const response = await fetch(`${Network.Domain}/deposit/store`, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                },
                body: JSON.stringify({
                    user_id: 1,
                    amount: amount,
                    date: date.toISOString().split("T")[0], // Format YYYY-MM-DD
                }),
            });

            console.log("Response status:", response.status);

            const data = await response.json();
            console.log("Response data:", data);

            if (response.ok) {
                Alert.alert("Success", "Deposit added successfully");
                router.back()
            } else {
                Alert.alert("Error", data.errors ? JSON.stringify(data.errors) : "Something went wrong");
            }
        } catch (error) {
            console.log("Fetch error:", error);
            Alert.alert("Error", "Network error");
        }
        setLoading(false);
    };


    return (
        <SafeAreaView style={{ flex: 1, backgroundColor: "white" }}>
            <View style={{ flexDirection: "row", marginLeft: 30, marginTop: 30, alignItems: "center", gap: 20 }}>
                <Image source={Assets.profile} style={{ width: 60, height: 60, borderRadius: 50 }} />
                <View>
                    <Text style={{ fontWeight: "500" }}>Ananda Mw</Text>
                    <Text style={{ color: "#5c5c5c" }}>Ananda@gmail.com</Text>
                </View>
            </View>

            <View style={{ marginHorizontal: 30, marginTop: 40 }}>
                <Text style={{ fontSize: 16, fontWeight: "bold", color: "#333", marginBottom: 8 }}>Payment Amount</Text>
                <TextInput
                    placeholder="0.00"
                    keyboardType="numeric"
                    value={amount}
                    onChangeText={setAmount}
                    style={{
                        fontSize: 20,
                        fontWeight: "bold",
                        borderWidth: 2,
                        borderColor: "orange",
                        borderRadius: 10,
                        paddingHorizontal: 10,
                        paddingVertical: 12,
                        color: "orange",
                    }}
                />
            </View>

            <View style={{ marginHorizontal: 30, marginTop: 20 }}>
                <Text style={{ fontSize: 16, fontWeight: "bold", color: "#333", marginBottom: 8 }}>Select Date</Text>
                <TouchableOpacity
                    onPress={() => setShowPicker(true)}
                    style={{ borderWidth: 2, borderColor: "orange", borderRadius: 10, paddingHorizontal: 10, paddingVertical: 12 }}
                >
                    <Text style={{ fontSize: 18, color: "orange" }}>{date.toDateString()}</Text>
                </TouchableOpacity>
                {showPicker && (
                    <DateTimePicker value={date} mode="date" display={Platform.OS === "ios" ? "inline" : "default"} onChange={handleDateChange} />
                )}
            </View>

            <TouchableOpacity
                onPress={handleSubmit}
                activeOpacity={0.7}
                style={{
                    position: "absolute",
                    bottom: 30,
                    left: 30,
                    right: 30,
                    alignItems: "center",
                    paddingVertical: 15,
                    backgroundColor: loading ? "#7aa8d9" : "#0087e3",
                    borderRadius: 10,
                }}
                disabled={loading}
            >
                <Text style={{ color: "white", fontSize: 18, fontWeight: "bold" }}>{loading ? "Saving..." : "Save"}</Text>
            </TouchableOpacity>
        </SafeAreaView>
    );
};

export default DepositScreen;
