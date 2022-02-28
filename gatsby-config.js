module.exports = {
  siteMetadata: {
    title: `emergency-fe-2022`,
    siteUrl: `https://emergency.nofap.com`
  },
  plugins: ["gatsby-plugin-react-helmet", {
    resolve: 'gatsby-plugin-manifest',
    options: {
      "icon": "src/images/icon.png"
    }
  }]
};