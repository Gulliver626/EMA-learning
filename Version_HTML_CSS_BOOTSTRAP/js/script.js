const body = document.querySelector("body"),
      nav = document.queryCommandValue("nav"),
      searchToggle = document.querySelector(".searchToggle");
// js code to toggle search box
      searchToggle.addEventListener("click",() =>{
        searchToggle.classList.toggle("active");
      })
