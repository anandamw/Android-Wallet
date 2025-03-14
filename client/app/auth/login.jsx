import React, { useState } from 'react';
import {
    SafeAreaView,
    StyleSheet,
    Text,
    View,
    TextInput,
    TouchableOpacity,
    Alert
} from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';
import { ImageBackground } from 'expo-image';
import { Ionicons } from '@expo/vector-icons';
import { useRouter } from 'expo-router';
import Assets from '../../assets';
import { Network } from '../../network';

const Login = () => {
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [passwordVisible, setPasswordVisible] = useState(false);
    const [loading, setLoading] = useState(false);
    const router = useRouter();

    const handleLogin = async () => {
        if (!email || !password) {
            Alert.alert('Error', 'Email dan password wajib diisi');
            return;
        }

        setLoading(true);

        try {
            const response = await fetch(`${Network.Domain}/login`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email, password })
            });

            const data = await response.json();

            if (response.ok) {
                await AsyncStorage.setItem('token', data.token);
                Alert.alert('Success', 'Login berhasil');
                router.replace('/home'); // Ganti dengan halaman setelah login
            } else {
                Alert.alert('Error', data.message || 'Login gagal');
            }
        } catch (error) {
            Alert.alert('Error', 'Terjadi kesalahan pada server');
        }

        setLoading(false);
    };

    return (
        <SafeAreaView style={styles.container}>
            <ImageBackground source={Assets.BackgroundLogin} style={styles.background}>
                <View style={styles.header}>
                    <Text style={styles.title}>Login and Start</Text>
                    <Text style={styles.title}>Transfering</Text>
                </View>

                <View style={styles.formContainer}>
                    <View>
                        <Text style={styles.label}>Email</Text>
                        <TextInput
                            placeholder="Your Email..."
                            style={styles.input}
                            keyboardType="email-address"
                            autoCapitalize="none"
                            value={email}
                            onChangeText={setEmail}
                        />
                    </View>

                    <View style={styles.inputContainer}>
                        <Text style={styles.label}>Password</Text>
                        <View style={styles.passwordContainer}>
                            <TextInput
                                placeholder="**********"
                                style={styles.input}
                                secureTextEntry={!passwordVisible}
                                value={password}
                                onChangeText={setPassword}
                            />
                            <TouchableOpacity
                                onPress={() => setPasswordVisible(!passwordVisible)}
                                style={styles.iconContainer}
                            >
                                <Ionicons
                                    name={passwordVisible ? "eye-off-outline" : "eye-outline"}
                                    size={24}
                                    color="gray"
                                />
                            </TouchableOpacity>
                        </View>
                    </View>
                </View>

                <View style={styles.buttonContainer}>
                    <TouchableOpacity style={styles.loginButton} onPress={handleLogin} disabled={loading}>
                        <Text style={styles.loginText}>{loading ? 'Loading...' : 'Login'}</Text>
                    </TouchableOpacity>
                </View>
            </ImageBackground>
        </SafeAreaView>
    );
};

export default Login;

const styles = StyleSheet.create({
    container: {
        flex: 1,
    },
    background: {
        flex: 1,
        resizeMode: 'cover',
        justifyContent: 'space-between',
        paddingBottom: 40,
        paddingHorizontal: 30,
    },
    header: {
        marginTop: 80,
    },
    title: {
        fontSize: 28,
        fontWeight: 'bold',
        color: '#333',
    },
    formContainer: {
        marginTop: 30,
    },
    label: {
        fontSize: 16,
        fontWeight: '600',
        marginBottom: 5,
        color: '#555',
    },
    input: {
        borderColor: '#ddd',
        borderWidth: 1,
        borderRadius: 10,
        paddingVertical: 12,
        paddingHorizontal: 15,
        fontSize: 16,
        color: '#333',
        backgroundColor: 'white',
    },
    passwordContainer: {
        flexDirection: 'row',
        alignItems: 'center',
        borderColor: '#ddd',
        borderWidth: 1,
        borderRadius: 10,
        backgroundColor: 'white',
    },
    iconContainer: {
        position: 'absolute',
        right: 15,
    },
    buttonContainer: {
        alignItems: 'center',
    },
    loginButton: {
        backgroundColor: '#007bff',
        paddingVertical: 15,
        borderRadius: 10,
        width: '100%',
        elevation: 3,
    },
    loginText: {
        textAlign: 'center',
        color: 'white',
        fontSize: 16,
        fontWeight: 'bold',
    },
});
