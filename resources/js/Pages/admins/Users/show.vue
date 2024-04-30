<template>
    <AdminsLayout>
    <div class="text-gray-200 bg-gray-300 body-font">
        <div class="container px-5 py-24 mx-auto  flex flex-col">
            <div class="lg:w-4/6 mx-auto">

                <div
                    class="flex flex-col justify-center sm:flex-row mt-10  rounded-xl"
                >
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 m-10 rounded-full inline-flex items-center justify-center bg-gray-800 text-gray-600"
                        >
                            <img
                                class="w-20 h-20 rounded-full "
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfhk7r0ysYUeoklEp9XpCCCvf346u8U2dBow&s "
                                alt="user photo"
                            />
                        </div>
                      <div class="bg-gray-800 overflow-hidden shadow rounded-lg border">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-200">
            User Profile
        </h3>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
        <dl class="sm:divide-y sm:divide-gray-200">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                    Full name
                </dt>
                <dd class="mt-1 text-sm text-gray-200 sm:mt-0 sm:col-span-2">
                    --
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                    Email address
                </dt>
                <dd class="mt-1 text-sm text-gray-200 sm:mt-0 sm:col-span-2">
                   --
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                    Phone number
                </dt>
                <dd class="mt-1 text-sm text-gray-200 sm:mt-0 sm:col-span-2">
                    -----
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-400">
                    Address
                </dt>
                <dd class="mt-1 text-sm text-gray-200 sm:mt-0 sm:col-span-2">
                    ----------<br>---------------
                </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <DisableButton/>
                <BanButton/>
                <DeleteButton/>
            </div>
        </dl>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</AdminsLayout>

</template>

<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import DeleteButton from "@/Components/DeleteButton.vue";
import DisableButton from "@/Components/DisableButton.vue";
import BanButton from "@/Components/BanButton.vue";
import AdminsLayout from "@/Layouts/AdminsLayout.vue";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>

<style lang="scss" scoped></style>
