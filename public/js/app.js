// document.getElementById('filter_company_id').addEventListener('change', function (){
//  let companyId=this.value || this.options[this.selectedIndex].value
//     window.location.href=window.location.href.split('?')[0] + '?company_id=' + companyId
// })
//
// document.querySelectorAll('.btn-delete').forEach((button)=>{
//     button.addEventListener('click', function (event){
//         event.preventDefault()
//         alert('delete')
//     })
// })

const filterCompanyId = document.getElementById("filter_company_id");
document.querySelectorAll(".btn-delete").forEach((button) => {
    button.addEventListener("click", function (event) {
        event.preventDefault();
        if (confirm("Are you sure?")) {
            const action = this.getAttribute("href");
            const form = document.getElementById("form-delete");
            form.setAttribute("action", action);
            form.submit();
        }
    });
});
if (filterCompanyId) {
    filterCompanyId.addEventListener("change", (event) => {
        const companyId = event.target.value || 0;
        const url = `${
            window.location.href.split("?")[0]
        }?company_id=${companyId}`;
        window.location.href = url;
    });
}
document.getElementById('btn-clear').addEventListener('click', ()=>{
    let input = document.getElementById('search'),
        select=document.getElementById('filter_company_id')
    input.value=""
    select.selectIndex= 0
    window.location.href=window.location.href.split('?')[0]
})
// const toggleClearButton=()=>{
//     let query = location.search,
//         pattern = /[?&]search=/, //?company_id=1&search=
//         button = document.getElementById('btn-clear')
//     if (pattern.test(query)){
//         button.style.display = "block"
//     } else{
//         button.style.display= "none"
//     }
// }
// toggleClearButton()
