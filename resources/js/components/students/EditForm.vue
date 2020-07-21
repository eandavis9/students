<template>
<div class='card'>
    <form method='post' @submit.prevent='update_student(student.id)'>
      <div class="card-body">
        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" class="form-control" id="firstname" placeholder="First Name" v-model='student.firstname'>
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control" id="lastname" placeholder="Last Name" v-model='student.lastname'>
        </div>

          <div class="form-group">
          <label for="birthday">Birthday</label>
          <input type="date" class="form-control" id="birthday" placeholder="Birthday" v-model='student.birthday'>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
              
</template>

<script>
export default {
    
    name : 'EditForm',
    props : ['student'],
    methods : {
        update_student(id){

            if(confirm('Are you sure')){

                axios.put('/get_students', {

                    student_id : id,
                    firstname : this.student.firstname,
                    lastname : this.student.lastname,
                    birthday : this.student.birthday
                })
                .then(res => {

                    //console.log(res.data.data)
                    alert('Success');
                    this.student = res.data.data;
                })
                .catch(error => {

                    console.log(error)
                })
            }
        }
    }
}
</script>