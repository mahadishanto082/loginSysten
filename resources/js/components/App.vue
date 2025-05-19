<template>
    <div class="container">
        <div class="row">
            <div class="col-7 mt-5 offset-3">
                <div class="card">
                    <div class="card-header" align="center">Basic login</div>
                    <div class="card-body">
                        <ul>
                            <li
                                class="text-danger"
                                v-for="(error, index) in errors"
                                :key="index"
                            >
                                {{ error }}
                            </li>
                        </ul>
                        <p class="text-success">
                            {{ successMsg }}  </p>
                        <form @submit.prevent="submit">
                            <div class="mb-3">
                                <label
                                    for="exampleInputEmail1"
                                    class="form-label"
                                >
                                    Email address</label
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
            successMsg: "", 
        };
    },

    methods: {
        submit() {
            if (this.Email === "" || this.password === "") {
                alert("Please fill in all fields");
                return;
            }
            axios
                .post("http://127.0.0.1:8000/api/login", {
                    email: this.Email,
                    password: this.password,
                })
                .then((response) => {
                     localStorage.setItem("auth_token", response.data.token);
                    this.successMsg = response.data.message;
                })
                    // Handle successful login here
                
                .catch((error) => {
                    if (error.response && error.response.data.errors) {
                        this.errors = Object.values(
                            error.response.data.errors
                        ).flat();
                    } else {
                        this.errors = ["Login failed. Please try again."];
                    }
                });
        },
    },
};
</script>
