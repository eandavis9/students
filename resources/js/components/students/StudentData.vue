<template>
    <div>

        <div>
        <a class="btn btn-app" @click='delete_data(student_data.id)'>
            <i class="fas fa-trash"></i> Delete
        </a>&nbsp;
        <a class="btn btn-app" @click='edit_data(student_data.id)'>
            <i class="fas fa-edit"></i> Edit
        </a>&nbsp;

        </div>

    <div class="form-group">
        <label for="grade">Grade</label>
        <select class='form-control' v-model='grade' @change='fetchSection(grade)' :disabled='readonly'>
            <option v-for='grade in allGrades' v-bind:key='grade.id' :value='grade.id'
            :selected='grade == grade.id'>{{grade.grade_name}}</option>
        </select>
        <!--<input type="text" class="form-control" id="grade" placeholder="Grade" 
                v-model='student_data.grade_name' :readonly='readonly'>-->
    </div>

    <div class="form-group">
        <label for="section">Section</label>
        <select class='form-control' v-model='section' @change='fetchSection(grade)' :disabled='readonly'>
            <option v-for='section in sections' v-bind:key='section.id' :value='section.id'
            :selected='section == section.id'>{{section.section_name}}</option>
        </select>
        <!--<input type="text" class="form-control" id="section" placeholder="Section" :readonly='readonly'>-->
    </div>

    <div class="form-group">
        <label for="weight">Weight</label>
        <input type="text" class="form-control" id="weight" placeholder="Weight" v-model='student_data.weight' :readonly='readonly'>
    </div>
    <div class="form-group">
        <label for="height">Height</label>
        <input type="text" class="form-control" id="height" placeholder="Height" v-model='student_data.height' :readonly='readonly'>
    </div>
    <!-- /.card-body -->
    </div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex';

export default {
    

    name : 'StudentData',
    props : ['student_data'],
    data (){

        return{

            readonly : true,
         //   grades : [],//this.$parent.fetchGrades(),
            sections : [],
            grade : this.student_data.grade_id,
            section : this.student_data.section_id,
            prev_selected : '',
            visible : false
        }
    },
    computed : mapGetters(['allGrades']),
    mounted (){

          this.fetchGrades();
          this.fetchSection(this.grade);
    },
    methods : {

        ...mapActions(['fetchGrades']),
        /*fetchGrades(){

            axios.get('/get_grades')
            .then(res=> {
                this.grades = res.data.data
            })
            .catch(error =>{

                console.log(error)
            })
        },*/
        fetchSection(id){

            axios.get('/get_sections',{

                params : {

                    grade_id : id
                }
            })
            .then(res=>{

                this.sections = res.data
               // console.log(res)
            })
            .catch(error =>{

                console.log(error)
            })
        },

        delete_data(id){

            //console.log(id)
            if(confirm('Are you sure?')){

                axios.delete(`/student_data/${id}`)
                .then( res => {

                    this.$parent.fetchStudentData(this.student_data.student_id);
                })
                .catch( error => {

                    console.log(error)
                })
            }
        },

        edit_data(id){

            //this.prev_selected = id;
          
            this.readonly = false;
            console.log(id)
        }
    }
}
</script>