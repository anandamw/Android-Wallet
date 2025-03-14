import { SafeAreaView, StyleSheet, Text, View, TouchableOpacity } from 'react-native'
import React from 'react'
import Assets from '../assets'

import { Image } from 'expo-image'
import { Link } from 'expo-router'
const splashscreen = () => {
  return (
    <View style={{ flex: 1 }}>
      <View style={{ marginVertical: 100, marginTop: 150, alignItems: 'center' }}>
        <Image style={{ width: 300, height: 300 }} source={Assets.Illustration} />
      </View>
      <View style={{ marginHorizontal: '30', alignItems: "center" }}>
        <Text style={{ fontSize: 20, fontWeight: 'bold' }}>
          Send & request payments
        </Text>
        <Text style={{ fontSize: 14, textAlign: 'center' }}>
          You can send or recieve any payments from yous accounts.
        </Text>
      </View>

      <TouchableOpacity activeOpacity={0.7} style={{
        marginHorizontal: 30, backgroundColor: '#1A87DD', paddingVertical: 15, borderRadius: 10,
        alignItems: 'center', marginTop: 100

      }}>

        <Link href={'auth/login'}>
          <Text style={{ color: "white" }}>Get Started</Text>
        </Link>
      </TouchableOpacity>
    </View>
  )
}

export default splashscreen

