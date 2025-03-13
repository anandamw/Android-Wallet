import { Image, StyleSheet, Text, View, ScrollView, SafeAreaView } from 'react-native'
import React from 'react'
import Assets from "../../assets";
const HistoryScreen = () => {
    return (
        <SafeAreaView style={{ flex: 1, backgroundColor: "white" }}>

            <ScrollView
                showsVerticalScrollIndicator={false}
                style={{
                    marginHorizontal: 30,
                    paddingBottom: 300,
                    marginTop: 20,

                    flexGrow: 1,
                }}
            >
                {/* start list  */}
                <View
                    style={{
                        alignItems: "center",
                        flexDirection: "row",
                        justifyContent: "space-between",
                        marginBottom: 20,
                    }}
                >
                    <View style={{ flexDirection: "row", gap: 23 }}>
                        <Image
                            source={Assets.profile}
                            style={{ width: 50, height: 50, borderRadius: 50 }}
                        />
                        <View>
                            <Text>Ananda Mw</Text>
                            <Text>Oct 14 2025, 10:23 AM </Text>
                        </View>
                    </View>

                    <View>
                        <Text>-Rp5000</Text>
                    </View>
                </View>
                {/* end list */}
                {/* start list  */}
                <View
                    style={{
                        alignItems: "center",
                        flexDirection: "row",
                        justifyContent: "space-between",
                        marginBottom: 20,
                    }}
                >
                    <View style={{ flexDirection: "row", gap: 23 }}>
                        <Image
                            source={Assets.profile}
                            style={{ width: 50, height: 50, borderRadius: 50 }}
                        />
                        <View>
                            <Text>Ananda Mw</Text>
                            <Text>Oct 14 2025, 10:23 AM </Text>
                        </View>
                    </View>

                    <View>
                        <Text>-Rp5000</Text>
                    </View>
                </View>
                {/* end list */}
                {/* start list  */}
                <View
                    style={{
                        alignItems: "center",
                        flexDirection: "row",
                        justifyContent: "space-between",
                        marginBottom: 20,
                    }}
                >
                    <View style={{ flexDirection: "row", gap: 23 }}>
                        <Image
                            source={Assets.profile}
                            style={{ width: 50, height: 50, borderRadius: 50 }}
                        />
                        <View>
                            <Text>Ananda Mw</Text>
                            <Text>Oct 14 2025, 10:23 AM </Text>
                        </View>
                    </View>

                    <View>
                        <Text>-Rp5000</Text>
                    </View>
                </View>
                {/* end list */}



            </ScrollView>
        </SafeAreaView>
    )
}

export default HistoryScreen

const styles = StyleSheet.create({})