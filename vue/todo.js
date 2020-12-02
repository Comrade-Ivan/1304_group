"use strict"

Vue.component('task', {
  props: ['task'],
  data: function() {
    return {
      
    }
  },
  template: `
    <div class="task animate__animated animate__backInLeft" v-bind:style="{background: doneBackground}">
      <div class="task-number">{{ task.id + 1 }}</div>
      <div class="task-title">{{ task.title }}</div>
      <div class="task-date">{{ task.date }}</div>
      <div class="task-buttons">
        <button class="btn btn-success" v-on:click="taskDone">Выполнено</button>
        <button class="btn btn-danger" v-on:click="deleteTask">Удалить</button>
      </div>
    </div>
  `,
  methods: {
    taskDone: function() {
      this.task.done = true;
    },
    deleteTask: function() {
      this.$el.classList.remove("animate__backInLeft")
      this.$el.classList.add("animate__backOutRight");
      this.$el.addEventListener("animationend", () => {
        this.$root.deleteTask(this.task);
      });
    },
  },
  computed: {
    doneBackground: function() {
      if(this.task.done) {
        return "lightgreen";
      } else {
        return "";
      }
    }
  }
})

const todoApp = new Vue({
  el: "#app",
  data: {
    newTask: "",
    tasks: [],
  },
  created: function() {
    if (localStorage.getItem("tasks")) {
      let tasksJSON = localStorage.getItem("tasks");
      this.tasks = JSON.parse(tasksJSON); //Раскодируем JSON
    }
  },
  methods: {
    addNewTask: function() {
      let date = new Date()
      let task = {
        id: this.tasks.length,
        title: this.newTask,
        date: `${date.getDate()}/${date.getMonth() + 1}/${date.getFullYear()}`,
        done: false,
      }
      this.tasks.push(task);
    },
    deleteTask: function(task) {
      this.tasks.splice(task.id, 1);
      this.updateTasksId();
    },
    updateTasksId: function() {
      this.tasks.forEach((item, index, array) => {
        array[index].id = index;
      })
    }
  },
  watch: {
    tasks: function(val) {
      let json = JSON.stringify(val); //Закодировать в JSON
      localStorage.setItem("tasks", json);
      console.log(json.length);
    }
  },
})