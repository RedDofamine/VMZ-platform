class actCNC {

   constructor() {
      this.tools;
   }
   getSeconds(tool) {
      tool = String(tool).split(".");
      if (tool[0]) {
         tool[0] = parseInt(tool[0]) * 60;
         return tool[0] + parseInt(tool[1]);
      } else {
         return parseInt(tool[1]);
      }
   }

   getMinutes(seconds) {
      if (seconds > 60) {
         return (String(Math.floor(seconds / 60)) + "." + String(seconds % 60));
      } else {
         return seconds;
      }
   }

   getMachineTime(tool = []) {
      let machineTime = 0;
      let arrLength = 0;
      if (tool.length) {
         arrLength = tool.length;
      } else {
         arrLength = this.tools.length;
      }
      for (let i = 0; i < arrLength; i++) {
         machineTime += this.getSeconds(tool[i] || this.tools[i]);
      }
      return machineTime = this.getMinutes(machineTime);
   }

   getToolsTime() {
      let toolsTime = [];

      for (let i = 0; i < this.tools.length; i++) {
         if (this.tools[i + 1]) {
            toolsTime[i] = this.getMinutes(this.getSeconds(this.tools[i + 1]) - this.getSeconds(this.tools[i]));
         }
      }
      return toolsTime;
   }

   getDumbToolsTime() {
      let dumbTools = [];
      for (let i = 0; i < this.tools.length; i++) {
         if (this.tools[i + 1] && this.tools[i + 1] > this.tools[i]) {
            dumbTools[i] = (this.tools[i + 1] - this.tools[i]).toFixed(2);
         } else {

         }
      }
      return dumbTools;
   }
   setTools(tools = []) {
      this.tools = tools;
   }
}

//getTools array from object Turner
//setFunction to add tool in tools before existed tools or after. Then 
// getMachineTime for all tools
//var tools = [toolOperations, "1.6"];
var toolOperations = ["0.7", "43.19", "1.16"];

