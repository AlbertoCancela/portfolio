const PROJECT_DATA = {
  sysmax: {
    name: "Control of Energy Consumption",
    forWho: "Anónimo: Condominio Acapulco",
    repo: "https://github.com/AlbertoCancela/kWh-sysmax",
    demo: "http://31.97.12.131/kWh-sysmax/src/",
    demoType: "demo", // "demo" | "page"
    images: [
      "/public/img/projects/sysmax/sysmax1.png",
      "/public/img/projects/sysmax/sysmax2.png",
      "/public/img/projects/sysmax/sysmax3.png",
      "/public/img/projects/sysmax/pdfGenerated.png",
    ],
    description: [
      "Web app to manage the energy consumption in a residential zone",
      "My main role in this project was the backend (Database, API REST, Routes, Reports, Etc.",
      "Not only for admin, the users can see their own energy consumption too (it depends the user type) and download his own consumption reports",
      "We used the Tuya's API for tuya devices and more.",


    ],
    techs: ["PHP", "MySQL", "API REST", "Reports", "Sessions & roles", "Virtual Server", "Hosting VPS", "Linux Debian", "Generate PDF & Excel", "Tuya API"]
  },
  viventi: {
    name: "Clínica Viventi - web page",
    forWho: "Clínica Viventi",
    repo: "",
    demo: "https://clinicaviventi.com/",
    demoType: "page", // "demo" | "page"
    images: [
      "/public/img/projects/viventi/viventi1.png",
      "/public/img/projects/viventi/viventi2.png",
      "/public/img/projects/viventi/viventi3.png",
      "/public/img/projects/viventi/viventi4.png",
    ],
    description: [
      "Website to show Clínica Viventi's services and collaborators",
      "It was made in PHP, JS and MySql to save certain data about the clients reviews",
      "I designed the website, using tools like figma, photoshop and hosted by hostinger. "
    ],
    techs: ["PHP", "MySQL", "JS", "Tailwind"]
  },
  pmr: {
    name: "PMR training website",
    forWho: "PMR: Consultoría y Capacitación",
    repo: "",
    demo: "https://pmrcc.com.mx/",
    demoType: "page", // "demo" | "page"
    images: [
      "/public/img/projects/pmr/pmr1.png",
      "/public/img/projects/pmr/pmr2.png",
      "/public/img/projects/pmr/pmr3.png",
      "/public/img/projects/pmr/pmr4.png",
    ],
    description: [
      "Website to show PMR's group their trainings and certifications.",
      "Using tools like Email Verify (with tokens) to register the attendance.",
      "The owner said she requires high demand on changes anytime anywhere, so I created an API with some endpoints."
    ],
    techs: ["PHP", "MySQL", "JS", "API REST", "Token Verification", "Reports"]
  },
  poas: {
    name: "POA (Proyecto Operativo Anual)",
    forWho: "Universidad Hipócrates",
    repo: "",
    demo: "https://www.figma.com/design/loe6ZlWjpJ89pgDk8rbrDo/POA-module?node-id=0-1&p=f&t=enpOmjz4kIOhJIzv-0",
    demoType: "demo", // "demo" | "page"
    images: [
      "/public/img/projects/poa/poa1.jpeg",
      "/public/img/projects/poa/poa2.jpeg",
      "/public/img/projects/poa/poa3.jpeg",
      "/public/img/projects/poa/poa4.jpeg",
    ],
    description: [
      "Internal project of the Hipocrates University that aimed to automate and keep a digital record of the institutional annual operating project.",
      "This project was made primarily using PHP and Firebird, using tailwind for designs and figma for layout.",
      "My main role was both design (layout and frontend), backend (databases and APIs) and gathering requirements from clients/end users"
    ],
    techs: ["PHP", "Firebird", "JS", "JQuery", "API REST", "Accounting", "Sessions", "Tailwind","Generate Reports"]
  },
  siaduh: {
    name: "SIADUH",
    forWho: "Universidad Hipócrates",
    repo: "",
    demo: "",
    demoType: "demo", // "demo" | "page"
    images: [
      "/public/img/projects/uh/uh1.png",
      "/public/img/projects/uh/uh2.png",
      "/public/img/projects/uh/uh3.png",
      "/public/img/projects/uh/uh4.png",
    ],
    description: [
      "The Comprehensive Administrative System of the Hippocrates University (SIADUH for its acronym in Spanish) is undoubtedly everything that forged the basis of my experience.",
      "Through this system, I learned how to maintain legacy code, search for non-existent documentation and create it from scratch by learning reverse engineering, it helped me improve my requirements gathering with users, etc.",
      "It undoubtedly laid the foundation for my adaptation to projects of different kinds, From inventory systems, graduate student management systems, maintenance of various and complex legacy administrative systems, to the creation of complex sections for the health sector. Including working under pressure and variety of technologies."
    ],
    techs: ["PHP", "Firebird", "MySql","JS","JSON", "JQuery", "API REST", "Python", "Laravel", "Generate Reports", "Sessions","Tailwind","Bootstrap","Etc."]
  },
  portfolio: {
    name: "This portfolio!",
    forWho: "Me!",
    repo: "",
    demo: "https://acancela.com",
    demoType: "page", // "demo" | "page"
    images: [
      "/public/img/projects/portfolio/portfolio1.png",
      "/public/img/projects/portfolio/portfolio2.png",
      "/public/img/projects/portfolio/portfolio3.png",
      "/public/img/projects/portfolio/portfolio4.png",
    ],
    description: [
      "It's a fairly simple portfolio, but I really wanted to create something that people who see it could enjoy!",
      "It was made primarily with tailwind, JS, and PHP for certain functionalities.",
      "I hope you truly enjoyed this tour, and if you're thinking of contacting me, you'll find everything in the contact icon on my desktop! Thank you so much for your time!"
    ],
    techs: ["PHP", "JS", "Tailwind", "JSON", "Figma", "Photoshop"]
  },
};
