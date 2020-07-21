<template>
    
<div>
  <b-modal id="add_section_modal" title="Add Section" hide-footer>
    <form method='post' @submit.prevent='add_section'>
      <div class="card-body">
        <div class="form-group">
          <label>Section</label>
          <input type="text" class="form-control" v-model='section' name='section' id="section" 
           placeholder="Section Name">
        </div>

        <div class='form-group'>
        <label>Grades</label>
        <select multiple='' class="custom-select" v-model='selections'>
            <option v-for='grade in grades' :value='grade.id' v-bind:key='grade.id'>{{grade.grade_name}}</option>
        </select>
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
    
    props : ['grades'],
    data (){

        return {

            selections : [],
            section : ''
           // grades : this.$parent.fetchGrades()
        }
    }, 

    methods : {

        
        add_section(){

            //console.log(this.selections)
            axios.post('/sections', {
                
                selections : this.selections,
                section : this.section
            
            })
            .then(res => {

                console.log(res.data)
            })
            .catch(error => {

                console.log(error)
            })
        }
    }
}

//console.log(this.$data);
</script>