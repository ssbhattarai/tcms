<template>
    <div class="reservation-form col-md-12  p2">
        <!--add form -->
        <div class="title">
            <h5>Welcome to Himalayan Spice Indian Cuisine</h5>
            <h1>Make a Reservation</h1>
            <div class="book-table-title">
                <div class="line"></div>
                <span class="word">Book A Table</span>
            </div>
        </div>
        <div class="form-group message col-12 p-0 m-0">
            <label class="error">
                {{ error }}
            </label>
            <label class="success">
                {{ success }}
            </label>
        </div>
        <div class="form-wrapper row mb-5  p-3">
            <div class="form-group col-md-6">
                <label class="text-secondary">Name</label>
                <input class="form-field" type="text" v-model="form.name" />
            </div>

            <div class="form-group col-md-6">
                <label class="text-secondary">Email</label>
                <input class="form-field" type="email" v-model="form.email" />
            </div>

            <div class="form-group col-md-4">
                <label class="text-secondary">Phone</label>
                <input class="form-field" type="text" v-model="form.phone" />
            </div>

            <div class="form-group col-md-2">
                <label class="text-secondary">Persons</label>
                <input class="form-field" type="text" v-model="form.persons" />
            </div>

            <div class="date-time col-md-6">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="text-secondary">Date</label>
                        <datepicker
                            class="datepicker"
                            v-model="form.date"
                        ></datepicker>
                        <!-- <input
                            class="form-field"
                            placeholder="04/07/2021"
                            type="date"
                            v-model="form.date"
                        /> -->
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-secondary">Time</label>
                        <vue-timepicker
                            class="timepicker"
                            v-model="form.time"
                            format="HH:mm"
                        ></vue-timepicker>
                        <!-- <input
                            placeholder="04:21 AM"
                            class="form-field"
                            type="time"
                            v-model="form.time"
                        /> -->
                    </div>
                </div>
            </div>

            <div class="form-group col-12">
                <label class="text-secondary">Message</label>
                <textarea
                    type="textarea"
                    v-model="form.message"
                    class="form-field"
                    rows="5"
                ></textarea>
            </div>

            <button type="submit" class="button" @click="validateSubmit">
                Book Now
                <i
                    v-if="isLoading"
                    class="fas fa-circle-notch fa-spin text-light"
                ></i>
            </button>
        </div>
    </div>
</template>

<script>
import Datepicker from "vuejs-datepicker";
import VueTimepicker from "vue2-timepicker/src/vue-timepicker.vue";
export default {
    components: {
        Datepicker,
        VueTimepicker
    },
    data() {
        return {
            isLoading: false,
            success: "",
            error: "",

            form: {
                name: "",
                email: "",
                phone: "",
                persons: "",
                time: "",
                date: "",
                message: ""
            }
        };
    },
    mounted() {},
    created() {
        this.getLoggedIndetails();
    },
    methods: {
        validateSubmit() {
            if (this.validateForm()) {
                this.submitForm();
            } else {
                window.location = "#reservation";
                this.error = "Please Fill Required Fields.";
                this.success = "";
            }
        },

        getLoggedIndetails() {
            axios.get("/get-logged-user").then(response => {
                var response = response.data.payload;
                // console.log(response);
                this.form.name = response.name ? response.name : "";
                this.form.email = response.email ? response.email : "";
                this.form.phone = response.phone ? response.phone : "";
            });
        },

        submitForm() {
            this.isLoading = true;
            var formData = new FormData();
            formData.append("name", this.form.name);
            formData.append("email", this.form.email);
            formData.append("phone", this.form.phone);
            formData.append("persons", this.form.persons);
            formData.append("date", this.form.date);
            formData.append("time", this.form.time);
            formData.append("message", this.form.message);
            const config = {
                "content-type": "multipart/form-data"
            };

            axios
                .post("/reservation/save", formData, config)
                .then(response => {
                    this.isLoading = false;
                    var response = response.data;
                    // console.log(response);
                    if (response.status === true) {
                        //hide form
                        window.location = "#reservation";
                        this.error = "";
                        this.success = response.message;
                        this.resetForm();
                    }
                })
                .catch(error => {
                    this.isLoading = false;
                });
        },

        validateForm() {
            if (
                this.form.name &&
                this.form.email &&
                this.form.phone &&
                this.form.persons &&
                this.form.date &&
                this.form.time
            ) {
                return true;
            } else {
                return false;
            }
        },

        resetForm() {
            //resetting form
            this.form.name = "";
            this.form.email = "";
            this.form.phone = "";
            this.form.persons = "";
            this.form.date = "";
            this.form.time = "";
        }
    }
};
</script>

<style>
a {
    padding: 5px;
    font-size: 20px;
}
.datepicker {
    border: 1px solid #f1f0ff;
    padding: 9px;
}
.datepicker div input {
    border: 0px solid grey;
}

.timepicker {
    width: 100%;
    border: 1px solid #f1f0ff;
    padding: 5px;
}
.timepicker input.display-time {
    border: 0px solid grey;
}
</style>
