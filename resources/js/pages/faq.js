let select    = (element) => document.querySelector(element)
let selectAll = (elements) => document.querySelectorAll(elements)


select('.item-scroll-down').addEventListener('mouseover', ()=>{

    select('.item-faq-container').scrollBy({
        top: 100,
        behavior: 'smooth'
      });
})

select('.item-scroll-up').addEventListener('mouseover', ()=>{
    
    select('.item-faq-container').scrollBy({
        top: -100,
        behavior: 'smooth'
      });
})