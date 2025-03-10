import React from "react";
import { View, Text, TouchableOpacity, StyleSheet } from "react-native";
import { AntDesign, Feather } from "@expo/vector-icons";

const ProfileScreen = ({ navigation }) => {
  return (
    <View style={styles.container}>
      {/* Header */}
      <View style={styles.header}>
        <Text style={styles.headerTitle}>My Profile</Text>
        <TouchableOpacity style={styles.editIcon} onPress={() => navigation.navigate("EditProfile")}>
          <Feather name="edit-3" size={18} color="black" />
        </TouchableOpacity>
      </View>

      {/* Profile Info */}
      <View style={styles.profileSection}>
        <View style={styles.avatar}>
          <Text style={styles.avatarText}>A</Text>
        </View>
        <Text style={styles.profileName}>AnandaMw</Text>
      </View>

      {/* Menu List */}
      <View style={styles.menuContainer}>
        <MenuItem icon="user" title="My Info" onPress={() => navigation.navigate("EditProfile")} />

        <MenuItem icon="credit-card" title="My Cards" />
        <MenuItem icon="settings" title="Settings" />
        <MenuItem icon="help-circle" title="Help Center" />
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
