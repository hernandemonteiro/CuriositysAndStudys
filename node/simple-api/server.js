import http from "http";
const processID = process.pid;

const server = http.createServer((request, response) => {
  for (index = 0; index < 1e7; index++)
    response.end(`handled pid: ${processID}`);
});

server.listen(2020).once("listening", () => {
  console.log("server in process", processID);
});
