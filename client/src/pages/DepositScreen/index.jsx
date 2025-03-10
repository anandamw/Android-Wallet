import React, { useState } from "react";
import {
    SafeAreaView,
    Text,
    TextInput,
    TouchableOpacity,
    View,
    Image,
    Platform,
} from "react-native";
import DateTimePicker from "@react-native-community/datetimepicker";
import AntDesign from "@expo/vector-icons/AntDesign";
import { ImageS } from "../../assets";

const DepositScreen = ({ navigation }) => {
    const [amount, setAmount] = useState("");
    const [date, setDate] = useState(new Date());
    const [showPicker, setShowPicker] = useState(false);

    const handleDateChange = (event, selectedDate) => {
        setShowPicker(false);
        if (selectedDate) {
            setDate(selectedDate);
        }
    };

    return (
        <SafeAreaView style={{ flex: 1, backgroundColor: "white" }}>
            {/* Header */}
            <View
                style={{
                    paddingVertical: 20,
                    paddingTop: 50,
                    alignItems: "center",
                    elevation: 5,
                    backgroundColor: "white",
                    shadowColor: "#000",
                    shadowOffset: { width: 0, height: 2 },
                    shadowOpacity: 0.1,
                    shadowRadius: 3,
                }}
            >
                {/* Back Button */}
                <TouchableOpacity
                    activeOpacity={0.7}
                    onPress={() => navigation.goBack()}
                    style={{ position: "absolute", left: 30, bottom: 22 }}
                >
                    <AntDesign name="arrowleft" size={24} color="black" />
                </TouchableOpacity>

                {/* Title */}
                <Text style={{ fontSize: 20, fontWeight: "bold" }}>Deposit</Text>
            </View>

            {/* User Info */}
            <View
                style={{
                    flexDirection: "row",
                    marginLeft: 30,
                    marginTop: 30,
                    alignItems: "center",
                    gap: 20,
                }}
            >
                <Image
                    source={ImageS.ProfileImage}
                    style={{ width: 60, height: 60, borderRadius: 50 }}
                />

                <View>
                    <Text style={{ fontWeight: "500" }}>Ananda Mw</Text>
                    <Text style={{ color: "#5c5c5c" }}>Ananda@gmail.com</Text>
                </View>
            </View>

            {/* Payment Amount Input */}
            <View style={{ marginHorizontal: 30, marginTop: 40 }}>
                <Text
                    style={{
                        fontSize: 16,
                        fontWeight: "bold",
                        color: "#333",
                        marginBottom: 8,
                    }}
                >
                    Payment Amount
                </Text>

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

            {/* Date Picker Input */}
            <View style={{ marginHorizontal: 30, marginTop: 20 }}>
                <Text
                    style={{
                        fontSize: 16,
                        fontWeight: "bold",
                        color: "#333",
                        marginBottom: 8,
                    }}
                >
                    Select Date
                </Text>

                <TouchableOpacity
                    onPress={() => setShowPicker(true)}
                    style={{
                        borderWidth: 2,
                        borderColor: "orange",
                        borderRadius: 10,
                        paddingHorizontal: 10,
                        paddingVertical: 12,
                    }}
                >
                    <Text style={{ fontSize: 18, color: "orange" }}>
                        {date.toDateString()}
                    </Text>
                </TouchableOpacity>

                {showPicker && (
                    <DateTimePicker
                        value={date}
                        mode="date"
                        display={Platform.OS === "ios" ? "inline" : "default"}
                        onChange={handleDateChange}
                    />
                )}
            </View>

            {/* Save Button */}
            <TouchableOpacity
                activeOpacity={0.7}
                style={{
                    position: "absolute",
                    bottom: 30,
                    left: 30,
                    right: 30,
                    alignItems: "center",
                    paddingVertical: 15,
                    backgroundColor: "#0087e3",
                    borderRadius: 10,
                }}
            >
                <Text style={{ color: "white", fontSize: 18, fontWeight: "bold" }}>
                    Save
                </Text>
            </TouchableOpacity>
        </SafeAreaView>
    );
};

export default DepositScreen;
