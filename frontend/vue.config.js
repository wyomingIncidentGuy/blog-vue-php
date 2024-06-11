module.exports = {
    devServer: {
        proxy: 'http://localhost:8080',
        watchOptions: {
            poll: true,
        },
        hot: true,
    }
};