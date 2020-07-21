<template>
<div>
  <b-modal id="add_grade_modal" title="Add Grade" hide-footer>
    <form method='post' @submit.prevent='add_grade'>
      <div class="card-body">
        <div class="form-group">
          <label for="grade_name">Grade Name</label>
          <input type="text" class="form-control" id="grade_name" v-model='grade_name' placeholder="Grade Name">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </b-modal>
</div>

</template>

<script>
export default {
  
  name : 'AddStudent',
  data () {

    return {

      grade_name : ''
        //grade : {name : ''}
    }
  },
  methods : {

    add_grade(){

       if(confirm('Are you sure')){

         axios.post('/get_grades',{

          grade_name : this.grade_name

         })
         .then(res=>{

            alert('Added Succesfully!')
            this.$bvModal.hide('add_grade_modal')
            this.$parent.fetchGrades()
         })
         .catch( error => {

           console.log(error)
         })
       }
    }
  }
}
</script>