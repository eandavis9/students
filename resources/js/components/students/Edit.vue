<template>
    
    <div class="row">
        <div class="col-lg-6">
        <div class="card">
        <div class="card-header">
        <h5 class="m-0">Student</h5>
        </div>
        <div class="card-body">

        <EditForm v-bind:student='student'></EditForm>
        </div>
        </div>
        </div>

        <div class="col-lg-6">
        <div class="card">
        <div class="card-header">
        <h5 class="m-0">Student Data</h5>
        <b-button class='btn btn-primary pull-right' v-b-modal.add_data_modal>Add Data</b-button>
        <AddData v-bind:student='student'></AddData>
        </div>
        <form @submit.prevent='update_data'>
        <div class="card-body" v-for='sd in student_data' v-bind:key='sd.id'>
            <StudentData v-bind:student_data='sd'></StudentData>
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
        </div>
    </div>

        

</template>

<script>
import EditForm from './EditForm.vue'

import StudentData from './StudentData.vue'
export default {
    
    name : 'Edit',
    components : {

        EditForm,
        StudentData
    },
    data (){

        return {
            student : [],
            student_data : [],
            edit_data : []
        }
    },

    created (){

         this.student = this.$route.params.student;
         this.fetchStudentData(this.student.id);
         
    },

    methods : {

        fetchStudentData(id){

            axios.get(`/get_students/${id}`)
            .then(res => {

              this.student_data = res.data;
              console.log(this.student_data);

              //this.student_data.forEach( stud => {

                //console.log(stud.weight)
              //})
              
            })
            .catch(error => {

              console.log(error)
            })
        },

        update_data(){

            
           /* axios.put(`/student_data/${this.student.id}`,{

                
            })
            .then(res => {

                console.log(res)
            })*/
            
        }
    }
    

}
</script>