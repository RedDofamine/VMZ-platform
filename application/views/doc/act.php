<!-- <a (click)="convert()">Generate PDF</a> -->
<input id="" type="text">
<p id=""></p>

<script src="/public/js/ToolTime.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"
      integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/"
      crossorigin="anonymous"></script> -->
<!-- <script>
   import * as jsPDF from 'jspdf';
   import 'jspdf-autotable';
   convert() {

      var doc = new jsPDF();
      var col = ["Sr. No.", "Details"];
      var col1 = ["Details", "Values"];
      var rows = [];
      var rows1 = [];

      /* The following array of object as response from the API req  */



      var itemNew = [

         { index: '1', id: 'Case Number', name: '101111111' },
         { index: '2', id: 'Patient Name', name: 'UAT DR' },
         { index: '3', id: 'Hospital Name', name: 'Dr Abcd' }

      ]


      itemNew.forEach(element => {
         var temp = [element.index, element.id];
         var temp1 = [element.id, element.name];
         rows.push(temp);
         rows1.push(temp1);

      });

      doc.autoTable(col, rows, { startY: 10 });

      doc.autoTable(col1, rows1, { startY: 60 });
      doc.save('Test.pdf');
   }
</script> -->