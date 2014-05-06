function item(){
    this.img = '';
    this.title = '';
    this.desc = '';
    this.id = '';
    this.cost = 0;
    
    this.setImg = function(imgurl){this.img = imgurl;};
    this.setTitle = function(title){this.title = title;};
    this.setDesc = function(desc){this.desc = desc;};
    this.setId = function(id){this.id = id;};
    this.setCost = function(cost){this.cost = cost;};
    
    this.append = function(){/*this function is meant to append the data to the stream*/
        var datax = '';
        datax = datax + '<div class="item" id="'+ this.id +'" onclick = "book('+this.id+')"><div class="item_header"><span class="item_img">';
        datax = datax + '<img src="'+ this.img +'" class="item_img"></span><span class="item_name">';
        datax = datax + this.title +'</span></div><div class="item_body"><div class="item_desc">';
        datax = datax + this.desc +'</div><div class="btn_buy">Order for inr '+this.cost+'</div></div></div>';
        $('#content').append(datax);
    };
}

var m = new item();
m.setImg('img/food.jpg');
m.setCost(500);
m.setId(123);
m.setTitle('chicken biryani');
m.append();

function book(id){

}