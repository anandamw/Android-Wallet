import React from "react";
import { View, Text, TextInput, TouchableOpacity, StyleSheet } from "react-native";
import { AntDesign, Feather } from "@expo/vector-icons";
import { useLocalSearchParams, useRouter } from "expo-router";

const EditProfile = () => {
    const router = useRouter();
    const { id } = useLocalSearchParams();

    return (
        <View style={styles.container}>
            {/* Profile Image Section */}
            <View style={styles.profileSection}>
                <View style={styles.avatar}>
                    <Feather name="user" size={40} color="#aaa" />
                </View>
                <TouchableOpacity style={styles.uploadButton}>
                    <Text style={styles.uploadText}>Upload Image {id}</Text>
                </TouchableOpacity>
            </View>

            {/* Input Fields */}
            <View style={styles.inputContainer}>
                <Text style={styles.label}>User Name</Text>
                <TextInput style={styles.input} placeholder="Enter your user name" />

                <Text style={styles.label}>Email</Text>
                <TextInput style={styles.input} placeholder="Enter your email" keyboardType="email-address" />

                <Text style={styles.label}>Mobile Number</Text>
                <TextInput style={styles.input} placeholder="Enter your mobile number" keyboardType="phone-pad" />
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
        </View>
    );
};

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: "white",
    },

    header: {
        backgroundColor: "white",
        paddingVertical: 20,
        paddingTop: 50,
        alignItems: "center",
        flexDirection: "row",
        justifyContent: "center",
        borderBottomWidth: 1,
        borderBottomColor: "#ddd",
    },
    backButton: {
        position: "absolute",
        left: 20,
        top: 52,
        zIndex: 10,
    },
    headerTitle: {
        fontSize: 18,
        fontWeight: "bold",
    },

    profileSection: {
        alignItems: "center",
        marginVertical: 20,
    },
    avatar: {
        width: 90,
        height: 90,
        borderRadius: 45,
        backgroundColor: "#f2f2f2",
        justifyContent: "center",
        alignItems: "center",
        borderWidth: 1,
        borderColor: "#ccc",
    },
    uploadButton: {
        marginTop: 10,
        paddingVertical: 5,
        paddingHorizontal: 15,
    },
    uploadText: {
        color: "#0087e3",
        fontSize: 14,
        fontWeight: "bold",
    },

    inputContainer: {
        paddingHorizontal: 20,
    },
    label: {
        fontSize: 14,
        fontWeight: "bold",
        marginTop: 15,
        marginBottom: 5,
        color: "#333",
    },
    input: {
        backgroundColor: "#f8f8f8",
        paddingVertical: 14,
        paddingHorizontal: 15,
        borderRadius: 10,
        borderWidth: 1,
        borderColor: "#ddd",
        fontSize: 16,
    },


});

export default EditProfile;
