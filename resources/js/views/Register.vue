<template>
    <div
        class="relative flex flex-col justify-center min-h-screen overflow-hidden"
    >
        <div
            class="w-full m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md"
        >
            <div class="text-center p-6 bg-slate-900 rounded-t">
                <a href="index.html"
                    ><img
                        src="@images/logo-sm.png"
                        alt=""
                        class="w-14 h-14 mx-auto mb-2"
                /></a>
                <h3 class="font-semibold text-white text-xl mb-1">
                    Pendaftaran
                </h3>
                <p class="text-xs text-slate-400">
                    Mohon isi data diri anda dengan benar.
                </p>
            </div>

            <form class="p-6" @submit.prevent="handleRegister">
                <!-- ! BEGIN: Nama Lengkap -->
                <div>
                    <label for="name" class="label"
                        >Nama Lengkap <span class="text-red-500">*</span></label
                    >
                    <input
                        type="text"
                        id="name"
                        v-model="name"
                        class="form-control dark:bg-slate-800/60 dark:border-slate-700/50"
                        placeholder="Masukan Nama Lengkap"
                        required
                        autofocus
                    />
                </div>
                <!-- ! END: Full Name -->

                <!-- ! BEGIN: Username -->
                <div class="mt-4">
                    <label
                        for="username"
                        class="block text-sm font-medium text-gray-700"
                        >Username <span class="text-red-500">*</span></label
                    >
                    <div>
                        <input
                            id="username"
                            v-model="username"
                            type="text"
                            placeholder="Masukkan Username"
                            class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm mt-1"
                            required
                        />
                    </div>
                </div>
                <!-- ! END: Username -->

                <!-- ! BEGIN: Email -->
                <div class="mt-4">
                    <label
                        for="email"
                        class="block text-sm font-medium text-gray-700"
                        >Email <span class="text-red-500">*</span></label
                    >
                    <div>
                        <input
                            id="email"
                            v-model="email"
                            type="email"
                            autocomplete="email"
                            placeholder="Masukkan Email"
                            class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm mt-1"
                            required
                        />
                    </div>
                </div>
                <!-- ! END: Email -->

                <!-- ! BEGIN: Nomor Telepon -->
                <div class="mt-4">
                    <label
                        for="phone_number"
                        class="block text-sm font-medium text-gray-700"
                        >Nomor Telepon
                        <span class="text-red-500">*</span></label
                    >

                    <div>
                        <input
                            id="phone_number"
                            v-model="phone_number"
                            type="text"
                            placeholder="Masukkan Nomor Telepon"
                            class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm mt-1"
                        />
                    </div>
                </div>
                <!-- ! END: Nomor Telepon -->

                <!-- ! BEGIN: Password -->
                <div class="mt-4">
                    <label
                        for="password"
                        class="block text-sm font-medium text-gray-700"
                        >Password <span class="text-red-500">*</span></label
                    >
                    <div>
                        <input
                            id="password"
                            v-model="password"
                            type="password"
                            autocomplete="password"
                            placeholder="Masukkan Password"
                            class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm mt-1"
                            required
                        />
                    </div>
                </div>
                <!-- ! END: Password -->

                <!-- ! BEGIN: Confirm Password -->
                <div class="mt-4">
                    <label
                        for="password_confirmation"
                        class="block text-sm font-medium text-gray-700"
                        >Confirm Password
                        <span class="text-red-500">*</span></label
                    >
                    <div>
                        <input
                            id="password_confirmation"
                            v-model="password_confirmation"
                            type="password"
                            autocomplete="password_confirmation"
                            placeholder="Masukkan Confirm Password"
                            class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm mt-1"
                            required
                        />
                    </div>
                </div>
                <!-- ! END: Confirm Password -->

                <!-- ! BEGIN Checkbox -->
                <div class="block mt-4">
                    <label class="custom-label">
                        <div
                            class="bg-white border dark:bg-slate-700 dark:border-slate-600 border-slate-200 rounded w-4 h-4 inline-block leading-4 text-center -mb-[3px]"
                        >
                            <input type="checkbox" class="hidden" />
                            <i
                                class="fas fa-check hidden text-xs text-slate-700 dark:text-slate-300"
                            ></i>
                        </div>
                        <span class="text-sm text-slate-500 font-medium">
                            Saya setuju dengan
                            <router-link
                                to="/register"
                                class="text-blue-600 hover:underline"
                                >Syarat dan Ketentuan</router-link
                            >
                            yang berlaku.
                        </span>
                    </label>
                </div>
                <!-- ! END Checkbox -->

                <!-- ! BEGIN: Button -->
                <div class="mt-6">
                    <button
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
                    >
                        Register
                    </button>
                </div>
                <!-- ! END: Button -->
            </form>
            <!-- ! BEGIN: Footer -->
            <p class="mb-5 text-sm font-medium text-center text-slate-500">
                Sudah punya akun?
                <router-link
                    to="/login"
                    class="font-medium text-blue-600 hover:underline"
                    >Masuk di sini</router-link
                >
            </p>
            <!-- ! END: Footer -->
        </div>
    </div>
</template>
<script>
import { useAuthStore } from "../store/useAuthStore";
import { useToast } from "vue-toastification";

export default {
    name: "Register",
    data() {
        return {
            name: "",
            username: "",
            email: "",
            phone_number: "",
            password: "",
            password_confirmation: "",
            success: "",
            errors: "",
        };
    },
    setup() {
        const toast = useToast();
        return { toast };
    },
    methods: {
        async handleRegister() {
            const userData = {
                name: this.name,
                username: this.username,
                email: this.email,
                phone_number: this.phone_number,
                password: this.password,
                password_confirmation: this.password_confirmation,
            };

            const success = await useAuthStore().register(userData);
            if (success) {
                const message = useAuthStore().getSuccess;
                this.toast.success(message, {
                    position: "top-right",
                    timeout: 3000,
                    closeOnClick: true,
                    pauseOnFocusLoss: true,
                    pauseOnHover: true,
                    draggable: true,
                    draggablePercent: 0.6,
                    showCloseButtonOnHover: false,
                    hideProgressBar: true,
                    closeButton: "button",
                    icon: true,
                    rtl: false,
                });
                this.$router.push({
                    path: "/login",
                    query: { username: this.username, password: this.password },
                });
            } else {
                const errorMessage = useAuthStore().getErrors;
                if (typeof errorMessage === "object") {
                    // If the error message is an object, extract the first error message
                    const firstErrorMessage = Object.values(errorMessage)[0][0];
                    this.toast.error(firstErrorMessage, {
                        position: "top-right",
                        timeout: 3000,
                        closeOnClick: true,
                        pauseOnFocusLoss: true,
                        pauseOnHover: true,
                        draggable: true,
                        draggablePercent: 0.6,
                        showCloseButtonOnHover: false,
                        hideProgressBar: true,
                        closeButton: "button",
                        icon: true,
                        rtl: false,
                    });
                } else
                    this.toast.error(errorMessage, {
                        position: "top-right",
                        timeout: 3000,
                        closeOnClick: true,
                        pauseOnFocusLoss: true,
                        pauseOnHover: true,
                        draggable: true,
                        draggablePercent: 0.6,
                        showCloseButtonOnHover: false,
                        hideProgressBar: true,
                        closeButton: "button",
                        icon: true,
                        rtl: false,
                    });
            }
        },
    },
};
</script>
