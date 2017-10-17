<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">

                        You are logged in! Publish your post!
                         <form>
                            <div class="form-group">
                                <input type="text" placeholder="Title" name="title" ref="title" class="form-control">
                            </div>
                             <div class="form-group">
                               <textarea name="text" ref="text" class="form-control" rows='10'></textarea>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" @click.prevent="sendForm()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')

        },
        methods: {
                sendForm: function()
                {
                    this.title = this.$refs.title.value;
                    this.text = this.$refs.text.value;
                    console.log(this.title);
                    axios.post('/post-new', { title: this.title,text: this.text })
                        .then(response => this.response)
                        .catch(errors => console.log(errors));
                    alert('Post published!');
                    this.title = '';
                     this.text= '';
                }
            }
    }
</script>
