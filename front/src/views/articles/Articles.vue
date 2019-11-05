<template>
    <div class="mt-5">
        <sort-tool />
        <article-item />
        <!-- TODO remove -->
        <article-item />
        <article-item />
        <!-- TODO remove -->
    </div>
</template>

<script>
    import SortTool from "../../components/articles/SortTool";
    import ArticleItem from "../../components/articles/ArticleItem";
    export default {
        name: "Articles",
        components: {ArticleItem, SortTool},
        data() {
            return {
                pd: {},
                loading: true,
            }
        },
        created() {
            this._doRequest();
        },
        methods: {
            _doRequest() {
                this.loading = true;
                axios.get(this.$appConf.articleUrl.list, this.request)
                    .then(response => {
                        this.pd = response.data;
                        this.loading = false;
                        console.log(this.pd);
                    }).catch(error => {
                    this.loading = false;
                    // this.showError(error);
                    console.log(error);
                });
            },
        }
    }
</script>

<style scoped>

</style>
