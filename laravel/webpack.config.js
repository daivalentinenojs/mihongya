const path = require('path')
const webpack = require("webpack");

module.exports = {
    module: {
        noParse: /jquery|lodash/,
    },
}
