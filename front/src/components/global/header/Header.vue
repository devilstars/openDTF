<template>
    <nav class="flex bg-gray-200 py-3 px-6">
        <div class="w-1/5">
            <div class="flex items-center flex-shrink-0 text-black mr-6 h-full">
                <a href="/">
                    <span class="font-bold text-xl tracking-tight">dev3l</span>
                </a>
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
