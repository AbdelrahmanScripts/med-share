<template>
    <nav class="flex mb-4" aria-label="Breadcrumb">
            <ol
                class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse"
            >
                <li class="inline-flex items-center">
                    <Link
                        href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white"
                    >
                        <svg
                            class="w-3 h-3 me-2.5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
                            />
                        </svg>
                        Home
                    </Link>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg
                            class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 6 10"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m1 9 4-4-4-4"
                            />
                        </svg>
                        <Link
                            href="#"
                            class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white"
                            >Specialties</Link
                        >
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg
                            class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 6 10"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m1 9 4-4-4-4"
                            />
                        </svg>
                        <span
                            class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"
                            >Speciality Charity Table</span
                        >
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg
                            class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 6 10"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m1 9 4-4-4-4"
                            />
                        </svg>
                        <span
                            class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400"
                            >Edit Charity Information</span
                        >
                    </div>
                </li>
            </ol>
        </nav>
        <h2
            class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white"
        >
            Edit Charity Information
        </h2>
        <hr class="h-px my-6 bg-gray-200 border-0 dark:bg-gray-700" />
    <section class="text-gray-200 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div
                    class="flex flex-col justify-center sm:flex-row mt-10 rounded-xl"
                >
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-800 text-gray-600"
                        >
                            <img
                                class="w-20 h-20 rounded-full"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfhk7r0ysYUeoklEp9XpCCCvf346u8U2dBow&s "
                                alt="Charity photo"
                            />
                        </div>
                        <!-- Descreption start-->
                        <form class="w-full max-w-lg bg-">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label
                                        class="block uppercase tracking-wide text-gray-900 text-s font-bold mb-2"
                                        for="grid-password"
                                    >
                                        Charity Name
                                    </label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Charity Name" required="">
                                    <label
                                        for="message"
                                        class="block uppercase tracking-wide text-gray-900 text-s font-bold mt-8"
                                        >Description</label
                                    >
                                    <textarea
                                        id="message"
                                        rows="4"
                                        col="10"
                                        class="block p-2.5 w-full text-sm text-gray-900 border-none rounded-lg border-2 border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder=" loremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem "
                                    ></textarea>
                                </div>
                            </div>
                            <SaveButton/>
                        </form>
                        <!-- Descreption end-->
                    </div>
                </div>
                <div class="py-20">
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div
                            class="flex flex-col flex-1 gap-10 lg:gap-0 lg:flex-row lg:justify-between"
                        >
                            <div
                                class="w-full lg:w-1/4 border-b pb-10 lg:border-b-0 lg:pb-0 lg:border-r border-gray-100"
                            >
                                <div
                                    class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center"
                                >
                                    260+
                                </div>
                                <span
                                    class="text-xl text-gray-500 text-center block"
                                    >Expert Consultants
                                </span>
                            </div>
                            <div
                                class="w-full lg:w-1/4 border-b pb-10 lg:border-b-0 lg:pb-0 lg:border-r border-gray-100"
                            >
                                <div
                                    class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center"
                                >
                                    975+
                                </div>
                                <span
                                    class="text-xl text-gray-500 text-center block"
                                    >Active Clients
                                </span>
                            </div>
                            <div
                                class="w-full lg:w-1/4 border-b pb-10 lg:border-b-0 lg:pb-0 lg:border-r border-gray-100"
                            >
                                <div
                                    class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center"
                                >
                                    724+
                                </div>
                                <span
                                    class="text-xl text-gray-500 text-center block"
                                    >Projects Delivered
                                </span>
                            </div>
                            <div class="w-full lg:w-1/4">
                                <div
                                    class="font-manrope font-bold text-5xl text-gray-900 mb-5 text-center"
                                >
                                    89+
                                </div>
                                <span
                                    class="text-xl text-gray-500 text-center block"
                                    >Orders in Queue
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <charities-users-table/>

        </div>
    </section>
</template>

<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import AdminsLayout from "@/Layouts/AdminsLayout.vue";
defineOptions ({layout:AdminsLayout})
import CharitiesUsersTable from '@/Components/CharitiesUsersTable.vue';
import SaveButton from "@/Components/SaveButton.vue";
// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>

<style lang="scss" scoped></style>
