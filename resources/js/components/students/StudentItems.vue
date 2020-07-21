<template>
    <tr>
        <td></td>
        <td>{{student.firstname}}</td>
        <td>{{student.lastname}}</td>
        <td>{{student.birthday}}</td>
        <td>
            <router-link :to="{name : 'edit_student', params : { student : student} }" class="btn btn-app">
                  <i class="fas fa-edit"></i> Edit
            </router-link>&nbsp;
            <a class="btn btn-app" @click='delete_student(student.id)'>
                  <i class="fas fa-trash"></i> Delete
            </a>
        </td>
    </tr>
</template>

<script>
export default {
    
    name : 'StudentItems',
    props : ['student'],
    methods : {

        delete_student(id){

            if(confirm('Are you sure?')){

                axios.delete(`/get_students/${id}`)
                .then(res=>{
                    alert('Deleted');
                    this.$parent.fetchStudents();
                })
                .catch(error => {

                    console.log(error);
                });
            }
        }
    }
}
</script>