import {
  StyleSheet,
  Text,
  View,
  TouchableOpacity,
} from "react-native";
import React from "react";

import MaterialIcons from '@expo/vector-icons/MaterialIcons';
import { useLinkBuilder, useTheme } from "@react-navigation/native";
import { createBottomTabNavigator } from "@react-navigation/bottom-tabs";
import AntDesign from "@expo/vector-icons/AntDesign";
import Entypo from "@expo/vector-icons/Entypo";
import FontAwesome from "@expo/vector-icons/FontAwesome";
import Ionicons from "@expo/vector-icons/Ionicons";
import Feather from "@expo/vector-icons/Feather";

const IconMenu = ({ label, focus }) => {
  switch (label) {
    case "HomeScreen":
      return (
        <View style={{ width: 60, height: 60, alignItems: "center", justifyContent: "center" }}>
          <Entypo name="home" size={24} style={{ color: focus ? "#0087e3" : "#5c5c5c", fontSize: 20 }} />
          <Text style={{ color: focus ? "#0087e3" : "#5c5c5c", fontSize: 9 }}>Home</Text>
        </View>
      );
    case "HistoryScreen":
      return (
        <View style={{ width: 60, height: 60, alignItems: "center", justifyContent: "center" }}>
          <MaterialIcons name="history" style={{ color: focus ? "#0087e3" : "#5c5c5c", fontSize: 20 }} />
          <Text style={{ color: focus ? "#0087e3" : "#5c5c5c", fontSize: 9 }}>History</Text>
        </View>
      );
    case "ProfileScreen":
      return (
        <View style={{ width: 60, height: 60, alignItems: "center", justifyContent: "center" }}>
          <FontAwesome name="user" style={{ color: focus ? "#0087e3" : "#5c5c5c", fontSize: 20 }} />
          <Text style={{ color: focus ? "#0087e3" : "#5c5c5c", fontSize: 9 }}>Profile</Text>
        </View>
      );
  }
};

const BottomTabs = ({ state, descriptors, navigation }) => {
  const { colors } = useTheme();
  const { buildHref } = useLinkBuilder();

  return (
    <View style={{
      flexDirection: "row",
      backgroundColor: "#e3e4e6",
      alignItems: "center",
      justifyContent: "space-around",
      paddingVertical: 5,
    }}>
      {state.routes.map((route, index) => {
        const { options } = descriptors[route.key];
        const label = options.tabBarLabel || options.title || route.name;
        const isFocused = state.index === index;

        const onPress = () => {
          const event = navigation.emit({ type: "tabPress", target: route.key, canPreventDefault: true });
          if (!isFocused && !event.defaultPrevented) {
            navigation.navigate(route.name, route.params);
          }
        };

        return (
          <TouchableOpacity
            key={index}
            accessibilityState={isFocused ? { selected: true } : {}}
            accessibilityLabel={options.tabBarAccessibilityLabel}
            testID={options.tabBarButtonTestID}
            onPress={onPress}
            style={{ flex: 1 }}
            activeOpacity={0.7}
          >
            <View style={{ alignItems: "center" }}>
              <IconMenu label={label} focus={isFocused} />
            </View>
          </TouchableOpacity>
        );
      })}
    </View>
  );
};

export default BottomTabs;
