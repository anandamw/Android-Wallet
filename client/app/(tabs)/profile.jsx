import React from "react";
import { View, Text, TouchableOpacity, StyleSheet } from "react-native";
import { AntDesign, Feather } from "@expo/vector-icons";
import { useRouter } from "expo-router";

const ProfileScreen = () => {
    const router = useRouter();
   

    return (
        <View style={styles.container}>
            {/* Profile Info */}
            <View style={styles.profileSection}>
                <View style={styles.avatar}>
                    <Text style={styles.avatarText}>A</Text>
                </View>
                <Text style={styles.profileName}>AnandaMw</Text>
            </View>

            {/* Menu List */}
            <View style={styles.menuContainer}>
                <MenuItem icon="user" title="My Info" onPress={() => router.push(`ProfileScreen/1`)} />
                <MenuItem icon="credit-card" title="My Cards" onPress={() => router.push('(screen)/MyCards')} />
                <MenuItem icon="settings" title="Settings" onPress={() => router.push('(screen)/Settings')} />
                <MenuItem icon="help-circle" title="Help Center" onPress={() => router.push('(screen)/HelpCenter')} />
            </View>
        </View>
    );
};

const MenuItem = ({ icon, title, onPress }) => {
    return (
        <TouchableOpacity style={styles.menuItem} onPress={onPress} activeOpacity={0.6}>
            <View style={styles.menuLeft}>
                <Feather name={icon} size={20} color="black" />
                <Text style={styles.menuText}>{title}</Text>
            </View>
            <AntDesign name="right" size={16} color="black" />
        </TouchableOpacity>
    );
};

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: "#f8f8f8",
    },

    header: {
        backgroundColor: "white",
        paddingVertical: 20,
        paddingTop: 50,
        alignItems: "center",
        borderBottomWidth: 1,
        borderBottomColor: "#ddd",
    },
    headerTitle: {
        fontSize: 18,
        fontWeight: "bold",
    },
    editIcon: {
        position: "absolute",
        right: 20,
        top: 55,
    },

    profileSection: {
        alignItems: "center",
        paddingVertical: 20,
        backgroundColor: "white",
        marginBottom: 10,
    },
    avatar: {
        width: 90,
        height: 90,
        borderRadius: 45,
        backgroundColor: "#ddd",
        justifyContent: "center",
        alignItems: "center",
    },
    avatarText: {
        fontSize: 32,
        fontWeight: "bold",
        color: "#555",
    },
    profileName: {
        marginTop: 10,
        fontSize: 16,
        fontWeight: "bold",
    },

    menuContainer: {
        marginTop: 10,
    },
    menuItem: {
        flexDirection: "row",
        alignItems: "center",
        justifyContent: "space-between",
        backgroundColor: "white",
        padding: 15,
        marginHorizontal: 20,
        borderRadius: 10,
        marginVertical: 5,
        borderWidth: 1,
        borderColor: "#eee",
    },
    menuLeft: {
        flexDirection: "row",
        alignItems: "center",
        gap: 10,
    },
    menuText: {
        fontSize: 16,
    },
});

export default ProfileScreen;
