<template>
    <nav class="bg-gray-200 py-3 px-6 border-b-2 fixed w-full z-10">
        <div class="flex max-w-screen-xl w-full mx-auto px-6">
            <div class="w-1/5 pl-2">
                <div class="flex items-center flex-shrink-0 text-black mr-6 h-full">
                    <router-link :to="{ name: 'home' }">
                        <span class="font-bold text-xl tracking-tight">dev3l</span>
                    </router-link>
                </div>
            </div>
            <div class="w-3/5 pl-6 pr-6">
                <div class="flex">
                    <div class="w-1/2">
                        <header-search />
                    </div>
                    <div class="w-1/2 flex">
                        <header-add-post />
                    </div>
                </div>
            </div>
            <div class="w-1/5">
                <header-menu-auth />
            </div>
        </div>
    </nav>
</template>

<script>
    import HeaderSearch from "./HeaderSearch";
    import HeaderAddPost from "./HeaderAddPost";
    import HeaderMenuAuth from "./HeaderMenuAuth";
    export default {
        name: 'GlobalHeader',
        components: {HeaderMenuAuth, HeaderAddPost, HeaderSearch},
        props: {}
    }
</script>

<style lang="scss"></style>
