import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App.jsx";

const rootElement = document.getElementById("react-app");
const root = ReactDOM.createRoot(rootElement);
root.render(<App />);

console.log("React starting...");
console.log("Root element:", document.getElementById("react-app"));