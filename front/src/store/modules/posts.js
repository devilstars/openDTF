import config from '../../config'

export default {
    actions: {
        /**
         * первичная загрузка постов
         * @param commit
         * @param getters
         * @param dispatch
         * @returns {Promise<void>}
         */
        async fetchPosts({ commit, getters, dispatch }) {
            let posts = {};
            
            await axios.get(config.postsUrl.list, {
                params: {
                    page: 1
                }
            })
                .then(response => {
                    posts = response.data;
                    commit('updateLoading', false)
                }).catch(error => {
                    commit('updateLoading', false);
                    console.log(error);
            });

            commit('loadPosts', posts);
        },
        /**
         * постраничная подгрузка контента
         * @param commit
         * @param getters
         * @param dispatch
         * @param state
         * @returns {Promise<void>}
         */
        async infiniteLoader({ commit, getters, dispatch }, state ) {
            await axios.get(config.postsUrl.list, {
                params: {
                    page: getters.getPage
                }
            })
                .then(response => {
                    if (response.data.meta.last_page >= getters.getPage) {
                        commit('updatePage', getters.getPage + 1);
                        commit('loadMorePosts', response);
                        state.loaded();
                    } else {
                        state.complete();
                    }
                }).catch(error => {
                    state.complete();
                    console.log(error);
            });
        },
    },
    mutations: {
        updatePage(state, page) {
            state.page = page
        },
        loadPosts(state, posts) {
            state.posts = posts
        },
        loadMorePosts(state, posts) {
            state.posts.data.push(...posts.data.data)
        },
        updateLoading(state, loading) {
            state.loading = loading;
        }
    },
    state: {
        page: 2,
        posts: [],
        loading: true,
    },
    getters: {
        getPage(state) {
            return state.page
        },
        getLoading(state) {
            return state.loading
        },
        getPosts(state) {
            return state.posts
        },
    }
}
