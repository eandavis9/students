<template>

<div class='container'>
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Students</h3>
     <b-button class='btn btn-primary pull-right' v-b-modal.add_student_modal>Add Student</b-button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <AddStudent></AddStudent>
    <table class="table table-bordered">
        <thead>                  
        <tr>
            <th style="width: 10px">#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Birthday</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody v-for='student in students' v-bind:key='student.id'>
            <StudentItems v-bind:student='student'> </StudentItems>
        </tbody>
    </table>
    </div>
    <!-- /.card-body -->
    </div>
</div>
    
</template>

<script>
export default {
    name : 'Student',
    data (){

        return{

            students : []
        }
    },
    created(){

        this.fetchStudents();
    },

    methods : {

        fetchStudents(){
            axios.get('/get_students')
            .then(res => {

                this.students = res.data.data;
               // console.log(res);
            })
        }
    }
}
</script>