let a  = "background-color:#00ffff; color:#ff00ff; ";
a += "font-size:24pt; font-family:'Times New Roman'; ";
n = 'Сеть магазинов "ВСЁ ДЛЯ ДОМА"';
let date = new Date();
d = date.getDate() + "." + (date.getMonth()+1) + "." + date.getFullYear();

document.write('<p align=center style="' + a + '">' + n + '</p><p>Сегодня ' + d + '</p>');