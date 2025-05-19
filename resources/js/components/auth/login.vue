<!-- <template>
    <div class="container">
        <div class="row">
            <div class="col-7 mt-5 offset-3">
                <div class="card">
                    <div class="card-header" align="center">Basic login</div>
                    <div class="card-body">
                        <form @submit="submit">
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                    >Email address</label
                                >
                                <input
                                    type="email"
                                    v-model="Email"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                />
                                <div id="emailHelp" class="form-text">
                                    We'll never share your email with anyone
                                    else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label
                                    for="exampleInputPassword1"
                                    class="form-label"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    v-model="password"
                                    class="form-control"
                                    id="exampleInputPassword1"
                                />
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            Email: "",
            password: "",
            errors: [],
        };
    },
    // methods:{
    //     submit(){
    //         email: this.email,
    //         password: this.password,
    //         alert('Login successful');
    //     }
    // }

    // axios.post('api/login',{

    // })
    methods: {
        submit() {
            const data = {
                email: this.Email,
                password: this.password,
            };
            axios
                .post("api/login", data)
                .then((response) => {
                    console.log(response.data);
                    alert("Login successful");
                    // Handle successful login here
                })
                .catch((error) => {
                    console.error(error.response);
                    alert("Login failed");
                    // Handle error here
                });
        },
    },
};
</script> -->
