<template>
    <div class="container">
        <h1 class="title">Your blog</h1>
        <div class="row">
            <div class="col-md-4" v-for="post in posts">
                <h4>{{ post.title }}</h4>
                <div class="text">
                    {{ post.content }}
                </div>
              </div>
          </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: [],

            };
        },

        created() {
            this.fetchPosts();
        },

        methods: {
             fetchPosts: function(){
                axios.get('/posts')
                        .then(response => {
                              // JSON responses are automatically parsed.
                              this.posts = response.data
                            })
             }


        }
    }
</script>