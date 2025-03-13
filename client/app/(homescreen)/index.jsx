import {
  ScrollView,
  StyleSheet,
  Text,
  View,
  Image,
  ImageBackground,
  TouchableOpacity,
  SafeAreaView,

} from "react-native";
import React, { useEffect, useState } from "react";


import MaterialIcons from "@expo/vector-icons/MaterialIcons";
import { ImageS } from "../../assets";

import { Network } from "../../network";

const HomeScreen = ({ navigation }) => {

  const [data, setData] = useState([]);
  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await fetch(`${Network.Domain}/api/data/history`);
        const result = await response.json();

        Array.isArray(result.data) ? setData(result.data) : setData([]);
      } catch (error) {
        console.error(error);
        setData([]);
      }
    };
    fetchData();
  }, []);
  return (
    <SafeAreaView style={{ flex: 1 }}>
      <ImageBackground source={ImageS.background}>
        <View style={{ marginHorizontal: 30, paddingBottom: 40 }}>
          <View
            style={{
              flexDirection: "row",
              alignItems: "center",
              justifyContent: "space-between",

              paddingVertical: 20,
              marginTop: 50,
            }}
          >
            <View>
              <Text style={{ fontWeight: "600", color: "white", fontSize: 20 }}>
                Dashboard
              </Text>
            </View>

            <Image
              source={ImageS.ProfileImage}
              style={{ width: 50, height: 50, borderRadius: 50 }}
            />
          </View>

          <View style={{ marginTop: 15 }}>
            <Text style={{ color: "#d1d1d1" }}>Hi, Ananda</Text>
          </View>
          <View style={{ marginTop: 10 }}>
            <Text style={{ color: "white", fontSize: 20 }}>Total Balance</Text>
          </View>
          <View
            style={{
              flexDirection: "row",
              alignItems: "flex-end",
              marginTop: 10,
              justifyContent: "space-between",
            }}
          >
            <View>
              <Text style={{ color: "white", fontSize: 35, fontWeight: "700" }}>
                Rp124.0000{" "}
              </Text>
            </View>
            <View>
              <MaterialIcons
                name="notifications-none"
                size={30}
                style={{ color: "white" }}
              />
            </View>
          </View>
        </View>
      </ImageBackground>

      <View style={{ marginHorizontal: 30, marginBottom: 30 }}>
        <View
          style={{
            flexDirection: "row",
            alignItems: "center",
            justifyContent: "center",
            gap: 13,
            marginTop: 30,
          }}
        >
          <TouchableOpacity
            activeOpacity={0.7}
            style={{
              paddingVertical: 10,
              paddingHorizontal: 20,
              backgroundColor: "#d69300",
              borderRadius: 21,
              borderRadius: 8,
            }}

            onPress={() => navigation.navigate('DepositScreen')}
          >
            <Text style={{ color: "white" }}>Send Money</Text>
          </TouchableOpacity>
          <TouchableOpacity
            activeOpacity={0.7}
            style={{
              paddingVertical: 10,
              paddingHorizontal: 20,
              backgroundColor: "#0087e3",
              borderRadius: 8,
            }}
          >
            <Text style={{ color: "white" }}>Request Money</Text>
          </TouchableOpacity>
        </View>
      </View>

      <View
        style={{
          marginHorizontal: 30,
          flexDirection: "row",
          alignItems: "center",
          justifyContent: "space-between",
        }}
      >
        <View>
          <Text style={{ color: "black", fontWeight: "700" }}>
            Last Transactions
          </Text>
        </View>
        <TouchableOpacity activeOpacity={0.7}>
          <Text style={{ color: "#0087e3", fontWeight: "400" }}>View All</Text>
        </TouchableOpacity>
      </View>

      <View style={{ flex: 1 }}>
        <ScrollView
          showsVerticalScrollIndicator={false}
          style={{
            marginHorizontal: 30,
            paddingBottom: 300,
            marginTop: 20,

            flexGrow: 1,
          }}
        >

          {Array.isArray(data) && data.length > 0 ? (
            data.map((item) => (
              <View
                key={item.id}
                style={{
                  alignItems: "center",
                  flexDirection: "row",
                  justifyContent: "space-between",
                  marginBottom: 20,
                }}
              >
                <View style={{ flexDirection: "row", gap: 23 }}>
                  <Image
                    source={ImageS.ProfileImage}
                    style={{ width: 50, height: 50, borderRadius: 50 }}
                  />
                  <View>
                    <Text>{item.name}</Text>
                    <Text>{item.datetime}</Text>
                  </View>
                </View>

                <View>
                  <Text>-Rp{item.mount}</Text>
                </View>
              </View>
            ))
          ) : (
            <Text style={{ textAlign: "center", marginTop: 20 }}>Tidak ada transaksi</Text>
          )}



        </ScrollView>
      </View>
    </SafeAreaView>
  );
};

export default HomeScreen;

const styles = StyleSheet.create({});
