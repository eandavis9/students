<template>
<div>
  <b-modal id="add_data_modal" title="Add Data" hide-footer>
    <form method='post' @submit.prevent='add_student_data'>
      <div class="card-body">
        <div class="form-group">
          <label for="grade_name">Grade</label>
          <select class="custom-select" v-model='grade' @change='fetchSection(grade)'>
            <option v-for='grade in allGrades' :value='grade.id' v-bind:key='grade.id'>{{grade.grade_name}}</option>
        </select>
        </div>

         <div class="form-group" v-if='sections.length > 0'>
          <label for="section">Section</label>
          <select class="custom-select" v-model='section'>
            <option v-for='section in sections' :value='section.id' v-bind:key='section.id'>{{section.section_name}}</option>
        </select>
        </div>

        <div class="form-group" v-if='sections.length > 0'>
            <label for="weight">Weight</label>
            <input type="number" class="form-control" id="weight" placeholder="Weight" v-model='weight'>
        </div>

        <div class="form-group" v-if='sections.length > 0'>
            <label for="height">Height</label>
            <input type="number" class="form-control" id="height" placeholder="Height" v-model='height'>
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer" v-if='sections.length > 0'>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
  </b-modal>
</div>

</template>

<script>

import {mapGetters, mapActions} from 'vuex';

export default {
    
    name :' AddData',
    props : ['student'],
    data(){

        return{
           // ...mapState(['grades']),
            //grades : [],
            sections : [],

           // student_data : {
                student_id : this.student.id,
                grade : '',
                section : '',
                weight : '',
                height : ''
           // }

        }
    },
    
    created () {

        this.fetchGrades()
    },
    computed : mapGetters(['allGrades']),
    methods : {

        ...mapActions (['fetchGrades']),
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

        add_student_data(){

            if(confirm('Are You Sure?')){

                axios.post('/student_data',{

                    student_id : this.student.id,
                    grade_id : this.grade,
                    section_id : this.section,
                    weight : this.weight,
                    height : this.height
                    //student_data : this.student_data
                })
                .then(res =>{

                   // console.log(res)
                   this.$bvModal.hide('add_data_modal');
                   this.$parent.fetchStudentData(this.student.id);
                })
                .catch(error =>{

                    console.log(error)
                })
            }

        }
    }

}
</script>