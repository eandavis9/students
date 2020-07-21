<template>
    <tr v-bind:key='grade.id'>
        <td></td>
        <td><input type='text' :name="`grade${grade.id}`" 
            v-model='grade.grade_name' 
            :ref="`grade${grade.id}`" ></td>
        <td>
             <a class="btn btn-app" @click='update_grade(grade)'>
                  <i class="fas fa-edit"></i> Update
            </a>&nbsp;
            <a class="btn btn-app" @click='delete_grade(grade.id)'>
                  <i class="fas fa-trash"></i> Delete
            </a>
        </td>
    </tr>
</template>

<script>
export default {
    
    name : 'GradeItems',
    props : ['grade'],
    methods : {

        update_grade(grade){

           // console.log(grade)
           // console.log(this.$refs['grade'+grade.id].value)

            if(confirm('Are you sure?')){

                axios.put(`/get_grades`, {
                
                    grade_name : this.$refs['grade'+grade.id].value,
                    grade_id : grade.id
                
                })
                .then(res => {

                    alert('Updated Successfully');

                    this.$parent.fetchGrades();
                    //console.log(res)
                })
                .catch(error => {

                    console.log(error)
                })

            }
            
        },

        delete_grade(id){

            if(confirm('Are you sure?')) {

                axios.delete(`/get_grades/${id}`)
                .then( res => {

                    alert('Deleted Successfully');
                    this.$parent.fetchGrades();
                })
                .catch( error => {

                    console.log(error)
                })
            }
        }
    }
    
}
</script>