import { Tabs } from "expo-router";



export default function _Layout() {
    return (
        <Tabs>
            <Tabs.Screen name="home" options={{ headerShown: false }} />
            <Tabs.Screen name="history" options={{
                headerTitle: 'History', headerTitleAlign: "center", headerShadowVisible: false
            }} />
            <Tabs.Screen name="profile" options={{
                headerTitle: 'Profile', headerTitleAlign: "center", headerShadowVisible: false
            }} />
        </Tabs>
    )
}

