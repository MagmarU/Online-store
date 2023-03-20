let items = {};
const descriptionGenerate = {
    'Материнская плата': {
        'item_Producer' : 'Производитель',
        'item_Form_Factor' : 'Форм-фактор', 
        'item_Socket' : 'Сокет', 
        'item_Chipset' : 'Чипсет', 
        'item_Memory_Slots' : 'Количество слотов памяти', 
        'item_RAM' : 'Тип озу',
    },
    'Процессор': {
        'item_Producer' : 'Производитель',
        'item_Socket' : 'Сокет',
        'item_Series' : 'Серия',
        'item_Clock_Frequency' : 'Тактовая частота',
        'item_Cores' : 'Количество ядер',
        'item_Techprocess' : 'Техпроцесс',
        'item_TDP' : 'Тепловыделение',
    },
    'Видеокарта': {
        'item_Producer' : 'Производитель',
        'item_gpu_producer' : 'Производитель графического процессора',
        'item_VideoMemory' : 'Объём видеопамяти',
        'item_gpu' : 'Графический процессор',
        'item_Memory_Type' : 'Тип памяти',
    },
    'Оперативная память': {
        'item_Producer' : 'Производитель',
        'item_Memory_Capacity' : 'Объём памяти',
        'item_Form_Factor' : 'Форм-фактор',
        'item_Memory_Type' : 'Тип памяти',
        'item_Clock_Frequency' : 'Тактовая частота',
    },
    'Жесткий диск': {
        'item_Producer' : 'Производитель',
        'item_Disk_Type' : 'Тип диска',
        'item_Hdd_Capacity' : 'Объём HDD',
        'item_Rotation_Speed' : 'Скорость вращения диска (об/мин)',
    },
    'Твердотельный накопитель': {
        'item_Producer' : 'Производитель',
        'item_Drive_Type' : 'Тип накопителя',
        'item_Ssd_Capacity' : 'Объём накопителя',
        'item_Form_Factor' : 'Форм-фактор',
        'item_Connection_Connector' : 'Разъём подключения',
    },
    'Блок питания': {
        'item_Producer' : 'Производитель',
        'item_Power' : 'Мощность',
        'item_Form_Factor' : 'Форм-фактор',
        'item_certificate' : 'Сертификат 80 PLUS',
        'item_Fan_Diameter' : 'Диаметр вентилятора',
    },
};


$.ajax({
    method: 'GET',
    url: "../filling_with_content/filling_handler.php",
    data: {
        action: 'getItems',
    },
}).done(function (result){
    for( let elem of JSON.parse(result) ){
        items[elem.ID] = elem;
        items[elem.ID].description = decodeSerialize( items[elem.ID].description );
        items[elem.ID].description = generationDescription( items[elem.ID].description, items[elem.ID].category );
    };
    localStorage.setItem( 'items', JSON.stringify(items) );
    addItems( JSON.parse( localStorage.getItem('items') ) );
});


let container = document.querySelector('.container');

function addItems( items ) {
    for( let item in items ) {
        let ul = container.querySelector(`div[name="${items[item].category}"] .product-tabs>ul`);
        let productCard = document.createElement('li');
        productCard.innerHTML = serializeItem( items[item] );
        ul.append( productCard );
    }
}

function decodeSerialize( str ) {
    let arr = [];
    arr = str.split('&');
    arr = arr.map( item => item = item.split('=') );
    let obj = Object.fromEntries( arr );
    return obj;
};


function generationDescription( description, category ) {
    let dsc = {};

    for( let prop in descriptionGenerate[category] ) {
        dsc[descriptionGenerate[category][prop]] = description[prop];
    }
    return dsc;
    
}


function serializeItem( item ) {
    let html = `
    <div class="product">
    <div class="product-image">
        <img src="${item.img}">
    </div>
    <span><a href="../productCard/itemCard.html#${item.ID}">${item.name}</a></span>
    <span
        style="font-size: 1.2rem; font-weight: 700; color: #D10024;">${item.price} руб.</span>
    </div>
    `;
    return html;
}