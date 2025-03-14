import { Stack } from "expo-router"


export default function RootLayout() {
    return (

        <Stack>
            <Stack.Screen name="index" options={{ headerShown: false }} />
            <Stack.Screen name="splashscreen" options={{ headerShown: false }} />
            <Stack.Screen name="auth/login" options={{ headerShown: false }} />
            <Stack.Screen name="(tabs)" options={{ headerShown: false, }} />
            <Stack.Screen name="ProfileScreen" options={{ headerTitle: 'My Info', headerTitleAlign: 'center' }} />
            <Stack.Screen name="DepositScreen/index" options={{ headerTitle: 'Deposit' }} />
        </Stack>
    )
}
