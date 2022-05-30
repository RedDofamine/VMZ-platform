class actCNC {

   constructor(tools = []) {
      this.tools = tools;
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

   getMachineTime() {
      let machineTime = 0;
      for (let i = 0; i < this.tools.length; i++) {
         machineTime += this.getSeconds(tools[i]);
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
         if (this.tools[i + 1]) {
            dumbTools[i] = (this.tools[i + 1] - this.tools[i]).toFixed(2);
         }
      }
      return dumbTools;
   }
}



var tools = ["0.7", "43.19", "1.16", "1.6"];

