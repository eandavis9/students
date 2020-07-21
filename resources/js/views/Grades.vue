<template>
   <div class='container'>
       <AddGrade></AddGrade>

       <AddSection v-bind:grades='grades'></AddSection>
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Grades</h3>
    <b-button class='btn btn-primary pull-right' v-b-modal.add_grade_modal>Add Grade</b-button>
    <b-button class='btn btn-primary pull-right' v-b-modal.add_section_modal>Add Section</b-button>
    </div>
    
    <!-- /.card-header -->
    <div class="card-body">
        <!--<AddStudent></AddStudent>-->
    <table class="table table-bordered">
        <thead>                  
        <tr>
            <th style="width: 10px">#</th>
            <th>Grade Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody v-for='grade in grades' v-bind:key='grade.id'>
            <GradeItems v-bind:grade='grade'> </GradeItems>
        </tbody>
    </table>
    </div>
    <!-- /.card-body -->
    </div>
</div>
</template>

<script>
export default {
    
    name : 'Grade',
    data () {

        return {


            grades : []
        }
    },

    created (){

        this.fetchGrades();
    },
    methods : {

        fetchGrades(){

            axios.get('/get_grades')
            .then(res => {
                //console.log(res)
                this.grades = res.data.data

            })
            .catch(error =>{

                console.log(error)
            })
        }
    }
}
</script>