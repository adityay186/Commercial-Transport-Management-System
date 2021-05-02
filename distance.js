dist=[
    [0,46,63,68,89,213,242,259,260,284],
    [46,0,17,22,43,167,196,213,214,238],
    [63,17,0,5,26,150,179,196,197,221],
    [68,22,5,0,21,145,174,191,192,216],
    [89,43,26,21,0,124,153,170,171,195],
    [213,167,150,145,124,0,29,46,47,71],
    [242,196,179,174,153,29,0,17,18,42],
    [259,213,196,191,170,46,17,0,1,25],
    [260,214,197,192,171,47,18,1,0,24],
    [284,238,221,216,195,71,42,25,24,0]
]

function indexer(station){
    dict={
        'Virar':0,
        'Borivali':1,
        'Mumbai Airport':2,
        'Bandra':3,
        'CSMT':4,
        'Lonavala':5,
        'Talegaon':6,
        'Akurdi':7,
        'Chinchwad':8,
        'Pune Airport':9
    }

    return dict[station];
}

function distance(){
    origin=document.getElementById("inputpickUP").value
    destination=document.getElementById("inputDrop").value
    x=indexer(origin);
    y=indexer(destination);
    var z;
    z=dist[x][y]
    document.getElementById("getDistance").value= z;
}