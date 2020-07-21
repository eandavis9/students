<template>

<b-modal id="add_student_modal" title="Add Student" hide-footer>
    <form method='post' @submit.prevent='add_student'>
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
  </b-modal>
    
</template>

<script>
export default {

    name : 'AddStudent',
    data () {

        return {

            student : {
            id : '',
            firstname : '',
            lastname : '',
            birthday : ''
            }
        }
    },
    methods : {

        add_student (){

            if(confirm('Are you sure?')){

                axios.post('/get_students', {

                    firstname : this.student.firstname,
                    lastname : this.student.lastname,
                    birthday : this.student.birthday
                })
                .then(res=>{
                    //console.log(res);
                    this.$bvModal.hide('add_student_modal')
                    this.$parent.fetchStudents();

                })
                .catch(error => {

                    console.log(error);
                })
            }
        }
    }
}
</script>