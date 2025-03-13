import { Stack } from "expo-router"


export default function RootProfile() {
    return (
        <Stack>
            <Stack.Screen name="[id]" options={{ headerShown: false, headerTitle: 'My Info', animation: 'fade' }} />
        </Stack>
    )
}
