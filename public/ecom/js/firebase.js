var firebaseConfig = {
    apiKey: "AIzaSyD4pR4tXCWRXlewAdNMa2ZnfQepuFBP6J4",
    authDomain: "pis-ecommerce.firebaseapp.com",
    projectId: "pis-ecommerce",
    storageBucket: "pis-ecommerce.appspot.com",
    messagingSenderId: "1051590254509",
    appId: "1:1051590254509:web:9c418824bf8ffe2823cb24",
    measurementId: "G-ZXHMH0HJMM"
};
firebase.initializeApp(firebaseConfig);

var URL = $('meta[name="baseURL"]').attr('content');

console.log("Firebase started.");

var googleProvider = new firebase.auth.GoogleAuthProvider();
