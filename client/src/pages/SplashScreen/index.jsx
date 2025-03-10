import { StyleSheet, Text, View, TouchableOpacity } from "react-native";
import React from "react";

const SplashScreen = ({ navigation }) => {
  return (
    <View style={{ marginVertical: "auto", alignItems: "center" }}>
      <TouchableOpacity
        style={{ backgroundColor: "red", padding: 10 }}
        activeOpacity={0.7}
        onPress={() => navigation.navigate("MainApp")}
      >
        <Text style={{ color: "white" }}>Start</Text>
      </TouchableOpacity>
    </View>
  );
};

export default SplashScreen;
