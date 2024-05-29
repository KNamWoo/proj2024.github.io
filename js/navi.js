function go_main(){
    location.href="https://knamwoo.github.io/proj2024.github.io/html/search.html"
}

temp = location.href.split("?");
data = temp[1].split("/");
address = data[0];

function print_add(){
    alert(address);
}